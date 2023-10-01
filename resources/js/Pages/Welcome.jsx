import React from "react";
import LoginPage from "./Auth/LoginPage";

export default function Welcome() {
    return (
        <div className="mt-5">
            {/* <div>
                <h1 className="text-center">Welcome to the Inertia website</h1>
            </div> */}
            <div className="d-flex justify-content-center mt-5">
                <LoginPage />
            </div>
        </div>
    );
}
