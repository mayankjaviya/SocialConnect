import { Link, usePage } from "@inertiajs/react";
import React from "react";

const navbar = (props) => {

    return (
        <header className="sticky-top bg-success py-2">
            <div className="container-fluid">
                <div className="row align-items-center justify-content-between">
                    <div className="col">
                        <h4 className="text-light text-center mb-0">
                            SocialConnect
                        </h4>
                    </div>
                </div>
            </div>
        </header>
    );
};

export default navbar;
