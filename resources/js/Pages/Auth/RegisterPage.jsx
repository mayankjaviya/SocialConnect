import React from "react";
import "../../../css/Auth/Login.css";
import { Link, useForm, usePage } from "@inertiajs/react";

const RegisterPage = () => {
    const {
        data,
        setData,
        post,
        processing,
        errors,
        setError,
        clearErrors,
        reset,
    } = useForm({
        name: "",
        username: "",
        email: "",
        password: "",
        password_confirmation: "",
    });

    const onSubmit = (e) => {
        e.preventDefault();

        setTimeout(() => {
            clearErrors();
        }, 3000);
        post("/register");
    };

    return (
        <div className="container d-flex justify-content-center">
            <div className="card col-md-6 p-4 rounded-3">
                <h2 className="text-center mb-4">Create new Account</h2>
                <form>
                    <div className="mb-3">
                        <label htmlFor="name" className="form-label">
                            Full name
                        </label>
                        <input
                            type="name"
                            className="form-control"
                            id="name"
                            placeholder="Enter your name"
                            value={data.name}
                            onChange={(e) => setData("name", e.target.value)}
                        />
                        <p className="text-danger">{errors.name}</p>
                    </div>
                    {/* username field */}
                    <div className="mb-3">
                        <label htmlFor="username" className="form-label">
                            Username
                        </label>
                        <input
                            type="text"
                            className="form-control"
                            id="username"
                            placeholder="Enter your username"
                            value={data.username}
                            onChange={(e) =>
                                setData("username", e.target.value)
                            }
                        />
                        <p className="text-danger">{errors.username}</p>
                    </div>

                    <div className="mb-3">
                        <label htmlFor="email" className="form-label">
                            Email
                        </label>
                        <input
                            type="email"
                            className="form-control"
                            id="email"
                            placeholder="Enter your email"
                            value={data.email}
                            onChange={(e) => setData("email", e.target.value)}
                        />
                        <p className="text-danger">{errors.email}</p>
                    </div>
                    <div className="mb-3">
                        <label htmlFor="password" className="form-label">
                            Password
                        </label>
                        <input
                            type="password"
                            className="form-control"
                            id="password"
                            placeholder="Enter your password"
                            value={data.password}
                            onChange={(e) =>
                                setData("password", e.target.value)
                            }
                        />
                        <p className="text-danger">{errors.password}</p>
                    </div>
                    <div className="mb-3">
                        <label
                            htmlFor="password_confirmation"
                            className="form-label"
                        >
                            Confirm Password
                        </label>
                        <input
                            type="password"
                            className="form-control"
                            id="password_confirmation"
                            placeholder="Confirm your password"
                            value={data.password_confirmation}
                            onChange={(e) =>
                                setData("password_confirmation", e.target.value)
                            }
                        />
                    </div>
                    <button
                        type="submit"
                        onClick={onSubmit}
                        className="btn btn-success w-100"
                    >
                        Register
                    </button>
                    <p className="text-center mt-3">
                        Already have an account?{" "}
                        <Link href="/login" className="text-success">
                            Login
                        </Link>
                    </p>
                </form>
            </div>
        </div>
    );
};

export default RegisterPage;
