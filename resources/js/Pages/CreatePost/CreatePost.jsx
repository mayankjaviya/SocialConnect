import React, { useState } from "react";
import "./../../../css/Posts/createPost.css";
import { router } from "@inertiajs/react";

const CreatePost = () => {
    const [caption, setCaption] = useState("");
    const [image, setImage] = useState(null);
    const [imageUrl, setImageUrl] = useState(
        "https://static.vecteezy.com/system/resources/previews/019/896/008/original/male-user-avatar-icon-in-flat-design-style-person-signs-illustration-png.png"
    );

    const handleCaptionChange = (e) => {
        setCaption(e.target.value);
    };

    const handleImageChange = (e) => {
        const selectedImage = e.target.files[0];
        setImage(selectedImage);
        setImageUrl(URL.createObjectURL(selectedImage));
    };

    const handleSubmit = (e) => {
        e.preventDefault();

        // You can add code here to handle image upload and post creation
        router.post("/new-post", { image: image, caption: caption });
        // Reset the form
        setCaption("");
        setImage(null);
    };

    return (
        <div className="create-post mt-2 shadow-lg">
            <div className="create-post-header">
                <h1>Create Post</h1>
            </div>
            <form onSubmit={handleSubmit}>
                <div className="create-post-content">
                    <div className="create-post-image">
                        <img src={imageUrl} alt="Preview" />
                        <label
                            htmlFor="image"
                            className="image-upload-label mt-2 text-success border-bottom"
                        >
                            <input
                                type="file"
                                className="form-control d-none"
                                id="image"
                                name="image"
                                accept="image/*"
                                onChange={handleImageChange}
                                required
                            />
                            Upload a photo
                        </label>
                    </div>
                    <div className="create-post-inputs">
                        <textarea
                            id="caption"
                            name="caption"
                            className="form-control"
                            rows={7}
                            value={caption}
                            onChange={handleCaptionChange}
                            placeholder="Write a caption..."
                            required
                        />
                    </div>
                </div>
                <div className="create-post-footer">
                    <button type="submit" className="bg-success">
                        Share
                    </button>
                </div>
            </form>
        </div>
    );
};

export default CreatePost;
