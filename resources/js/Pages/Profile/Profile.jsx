import React from "react";
import ProfileHeader from "./ProfileHeader";
import PostGrid from "./PostGrid";
import Footer from "./Footer";
import "../../../css/Profile/profile.css";

export default function Profile() {
    return (
        <div className="profile">
            <ProfileHeader />
            <PostGrid />
            <Footer />
        </div>
    );
}
