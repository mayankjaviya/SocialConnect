import React from "react";
import Navbar from "./navbar";
import Footer from "./Footer";
import "../../../css/app.css";

const app = ({ children }) => {
    return (
        <div>
            <Navbar />
            <div className="mb-5">{children}</div>
            <Footer />
        </div>
    );
};

export default app;
