import { faRightFromBracket } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { Link, usePage } from "@inertiajs/react";
import React from "react";

const navbar = (props) => {
    const { users, auth } = usePage().props;

    return (
        // <div>
        //     <nav className="navbar navbar-expand-lg navbar-dark bg-success">
        //         <div className="container-fluid">
        //             <a className="navbar-brand fs-3" href="#">
        //                 InertiaChat
        //             </a>
        //             <button
        //                 className="navbar-toggler"
        //                 type="button"
        //                 data-bs-toggle="collapse"
        //                 data-bs-target="#navbarSupportedContent"
        //                 aria-controls="navbarSupportedContent"
        //                 aria-expanded="false"
        //                 aria-label="Toggle navigation"
        //             >
        //                 <span className="navbar-toggler-icon"></span>
        //             </button>
        //             <div
        //                 className="collapse navbar-collapse"
        //                 id="navbarSupportedContent"
        //             >
        //                 <ul className="navbar-nav me-auto mb-2 mb-lg-0"></ul>
        //                 <div className="d-flex">
        //                     <ul className="navbar-nav me-auto mb-2 mb-lg-0">
        //                         <li className="nav-item dropdown">
        //                             <a
        //                                 className="nav-link dropdown-toggle active"
        //                                 href="#"
        //                                 id="navbarDropdown"
        //                                 role="button"
        //                                 data-bs-toggle="dropdown"
        //                                 aria-expanded="false"
        //                             >
        //                                 Login
        //                                 {auth && (
        //                                     <span>
        //                                         <strong> {auth.name}</strong>
        //                                     </span>
        //                                 )}
        //                             </a>
        //                             <ul
        //                                 className="dropdown-menu login-dropdown"
        //                                 aria-labelledby="navbarDropdown"
        //                                 style={{ left: "unset", right: 0 }}
        //                             >
        //                                 {users.map((user) => (
        //                                     <li key={user.id}>
        //                                         <Link
        //                                             className="dropdown-item"
        //                                             href="login"
        //                                             data={{ id: user.id }}
        //                                             method="post"
        //                                         >
        //                                             {user.name}
        //                                         </Link>
        //                                     </li>
        //                                 ))}
        //                             </ul>
        //                         </li>
        //                     </ul>
        //                 </div>
        //             </div>
        //         </div>
        //     </nav>
        // </div>
        <header className="sticky-top bg-success py-2">
            <div className="container-fluid">
                <div className="row align-items-center justify-content-between">
                    <div className="col">
                        <h4 className="text-light text-center mb-0">
                            InertiaChat
                        </h4>
                    </div>
                    <div className="d-flex col-auto">
                        <ul className="navbar-nav me-auto">
                            <li className="nav-item dropdown">
                                <a
                                    className="nav-link dropdown-toggle text-white py-0"
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
        </header>
    );
};

export default navbar;
