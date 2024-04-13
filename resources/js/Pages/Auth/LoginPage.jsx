import React from "react";
import "../../../css/Auth/Login.css";
import { Link, useForm, usePage } from "@inertiajs/react";

const LoginPage = () => {

    const { props } = usePage();
    const { data, setData, post, processing, errors, reset } = useForm({
        email: "",
        password: "",
    });

    console.log(props.errors);

    const onSubmit = (e) => {
        e.preventDefault();
        post("/login");
    };

    return (
        <div className="container d-flex justify-content-center">
            <div className="card col-md-6 p-4 rounded-3">
                <h2 className="text-center mb-4">Login to SocialConnect</h2>
                {Object.values(props.errors).map((value) => (
                    <span className="alert alert-danger">
                        <span>{value}</span>
                    </span>
                ))}
                <form>
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
                    </div>
                    <button
                        type="submit"
                        onClick={onSubmit}
                        className="btn btn-success w-100"
                    >
                        Login
                    </button>
                    <p className="text-center mt-3">
                        Don't have an account?{" "}
                        <Link href="/register" className="text-success">
                            Register
                        </Link>
                    </p>
                </form>
            </div>
        </div>
    );
};

export default LoginPage;
