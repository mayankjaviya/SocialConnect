import React from "react";
import "../../../css/Auth/Login.css";

const LoginPage = () => {
    return (
        <div className="container d-flex justify-content-center">
            <div className="card col-6 p-4 rounded-3">
                <h2 className="text-center mb-4">Login to InertiaChat</h2>
                <form>
                    <div className="mb-3">
                        <label htmlFor="username" className="form-label">
                            Username
                        </label>
                        <input
                            type="text"
                            className="form-control"
                            id="username"
                            placeholder="Enter your username"
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
                        />
                    </div>
                    <button type="submit" className="btn btn-success w-100">
                        Login
                    </button>
                </form>
            </div>
        </div>
    );
};

export default LoginPage;
