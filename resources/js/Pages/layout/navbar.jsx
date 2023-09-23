import { Link, usePage } from "@inertiajs/react";
import React from "react";

const navbar = (props) => {
    const { users, auth } = usePage().props;
    console.log(users);
    return (
        <div>
            <nav className="navbar navbar-expand-lg navbar-dark bg-success">
                <div className="container-fluid">
                    <a className="navbar-brand fs-3" href="#">
                        InertiaChat
                    </a>
                    <button
                        className="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span className="navbar-toggler-icon"></span>
                    </button>
                    <div
                        className="collapse navbar-collapse"
                        id="navbarSupportedContent"
                    >
                        <ul className="navbar-nav me-auto mb-2 mb-lg-0">
                            <li className="nav-item">
                                <Link
                                    aria-current="page"
                                    href="/"
                                    className="nav-link text-decoration-none text-white"
                                >
                                    Welcome
                                </Link>
                            </li>
                            <li className="nav-item">
                                <Link
                                    aria-current="page"
                                    href="/profile"
                                    className="nav-link text-white"
                                >
                                    Profile
                                </Link>
                            </li>
                        </ul>
                        <div className="d-flex">
                            <ul className="navbar-nav me-auto mb-2 mb-lg-0">
                                <li className="nav-item dropdown">
                                    <a
                                        className="nav-link dropdown-toggle active"
                                        href="#"
                                        id="navbarDropdown"
                                        role="button"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false"
                                    >
                                        Login
                                        {auth && (
                                            <span>
                                                <strong> {auth.name}</strong>
                                            </span>
                                        )}
                                    </a>
                                    <ul
                                        className="dropdown-menu login-dropdown"
                                        aria-labelledby="navbarDropdown"
                                        style={{ left: "unset", right: 0 }}
                                    >
                                        {users.map((user) => (
                                            <li key={user.id}>
                                                <Link
                                                    className="dropdown-item"
                                                    href="login"
                                                    data={{ id: user.id }}
                                                    method="post"
                                                >
                                                    {user.name}
                                                </Link>
                                            </li>
                                        ))}
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    );
};

export default navbar;