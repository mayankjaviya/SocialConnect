import React, { useState } from "react";
import { useForm } from "@inertiajs/react";
import { Link } from "@inertiajs/react";

export default function EditProfile(props) {
    const { user } = props;

    const {
        data,
        setData,
        post,
        processing,
        errors,
        setError,
        reset,
        clearErrors,
        hasErrors,
    } = useForm({
        name: user.name,
        email: user.email,
        username: user.username,
        bio: user.bio,
    });

    const [imageUrl, setImageUrl] = useState(user.user_profile);
    const [isValidImage, setIsValidImage] = useState(true);

    const onChangeProfileImage = (e) => {
        const selectedImage = e.target.files[0];
        // check if image is valid
        if (!selectedImage.type.startsWith("image/")) {
            setError("profile", "Please select an image file");
            return;
        }
        setData("profile", selectedImage);
        setImageUrl(URL.createObjectURL(selectedImage));
    };

    const onChangeUsername = (e) => {
        // validate only letter and number and underscore allowed
        const regex = /^[a-z0-9_]*$/;

        // Test the input value against the regex
        if (!regex.test(e.target.value)) {
            setError(
                "username",
                "Please enter small letters, underscores, and numbers only."
            );
            setIsValidImage(false);
        } else {
            setIsValidImage(true);
            clearErrors("username");
        }

        setData("username", e.target.value);
    };

    const handleEditProfileForm = (e) => {
        e.preventDefault();
        if (isValidImage) {
            post("/edit-profile");
        }
    };

    return (
        <div>
            <div className="card">
                <div className="card-body">
                    {/* form with inputs : name , email, username, profile picture */}
                    <form onSubmit={handleEditProfileForm}>
                        <div className="row">
                            <div className="col-md-6 mb-3">
                                <div className="d-flex align-items-center">
                                    <div className="">
                                        <img
                                            src={imageUrl}
                                            alt="profile"
                                            height={100}
                                            width={100}
                                            className="rounded-pill "
                                            style={{ objectFit: "cover" }}
                                        />
                                    </div>
                                    <div className="ms-3">
                                        <a
                                            onClick={() =>
                                                document
                                                    .getElementById("profile")
                                                    .click()
                                            }
                                            className="btn btn-success"
                                        >
                                            Change Avatar
                                        </a>
                                    </div>
                                </div>
                                <input
                                    type="file"
                                    className="form-control d-none"
                                    id="profile"
                                    name="profile"
                                    onChange={onChangeProfileImage}
                                />
                                {errors.profile && (
                                    <span className="text-danger">
                                        {errors.profile}
                                    </span>
                                )}
                            </div>
                            <div className="col-md-6 mb-3">
                                <label htmlFor="name" className="form-label">
                                    Name
                                </label>
                                <input
                                    type="text"
                                    className="form-control"
                                    value={data.name}
                                    onChange={(e) =>
                                        setData("name", e.target.value)
                                    }
                                />
                                {errors.name && (
                                    <span className="text-danger">
                                        {errors.name}
                                    </span>
                                )}
                            </div>
                            <div className="col-md-6 mb-3">
                                <label
                                    htmlFor="username"
                                    className="form-label"
                                >
                                    Username
                                </label>
                                <input
                                    type="text"
                                    className="form-control"
                                    id="username"
                                    name="username"
                                    value={data.username}
                                    onChange={onChangeUsername}
                                />
                                {errors.username && (
                                    <span className="text-danger">
                                        {errors.username}
                                    </span>
                                )}
                            </div>

                            <div className="col-md-6 mb-3">
                                <label htmlFor="email" className="form-label">
                                    Email
                                </label>
                                <input
                                    type="email"
                                    className="form-control"
                                    id="email"
                                    name="email"
                                    value={data.email}
                                    onChange={(e) =>
                                        setData("email", e.target.value)
                                    }
                                />
                                {errors.email && (
                                    <span className="text-danger">
                                        {errors.email}
                                    </span>
                                )}
                            </div>
                            <div className="col-md-12 mb-3">
                                <label htmlFor="bio" className="form-label">
                                    Bio
                                </label>
                                <textarea
                                    name="bio"
                                    id="bio"
                                    cols="5"
                                    rows="5"
                                    value={data.bio}
                                    onChange={(e) => {
                                        setData("bio", e.target.value);
                                        clearErrors("bio");
                                    }}
                                    placeholder="Write something about yourself..."
                                >
                                    {data.bio}
                                </textarea>
                                {errors.bio && (
                                    <span className="text-danger">
                                        {errors.bio}
                                    </span>
                                )}
                            </div>
                        </div>

                        <button type="submit" className="btn btn-primary">
                            Save
                        </button>
                        <Link
                            href="/profile"
                            as="button"
                            className="btn btn-secondary ms-2"
                        >
                            Back
                        </Link>
                    </form>
                </div>
            </div>
        </div>
    );
}
