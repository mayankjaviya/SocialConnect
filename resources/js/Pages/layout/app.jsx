import React from "react";
import Navbar from "./navbar";
import Footer from "./Footer";
import "../../../css/app.css";
import { usePage } from "@inertiajs/react";
import AuthNavbar from "./AuthNavbar";

const app = ({ children }) => {
    const { auth, flash } = usePage().props;
    return (
        <div className="vh-100 main-content">
            {auth && <AuthNavbar auth={auth} />}
            {flash?.success && (
                <div className="alert alert-success">{flash.success}</div>
            )}
            <div className="">{children}</div>
            {auth && <Footer />}
        </div>
    );
};

export default app;
