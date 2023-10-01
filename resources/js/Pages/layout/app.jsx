import React from "react";
import Navbar from "./navbar";
import Footer from "./Footer";
import "../../../css/app.css";
import { usePage } from "@inertiajs/react";
import AuthNavbar from "./AuthNavbar";

const app = ({ children }) => {
    const { auth } = usePage().props;
    console.log(auth);
    return (
        <div className="vh-100 main-content">
            {!auth ? <Navbar /> : <AuthNavbar auth={auth} />}

            <div className="">{children}</div>
            {auth && <Footer />}
        </div>
    );
};

export default app;
