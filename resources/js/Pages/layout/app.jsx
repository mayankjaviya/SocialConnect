import React from "react";
import Navbar from "./navbar";
import Footer from "./Footer";
import "../../../css/app.css";
import { usePage } from "@inertiajs/react";

const app = ({ children }) => {
    const { auth } = usePage().props;
    return (
        <div>
            {!auth && <Navbar />}
            <div className="mb-5">{children}</div>
            <Footer />
        </div>
    );
};

export default app;
