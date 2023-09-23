import React from "react";
import Navbar from "./navbar";

const app = ({ children }) => {
    console.log(children);
    return (
        <div>
            <Navbar />
            <div>{children}</div>
        </div>
    );
};

export default app;
