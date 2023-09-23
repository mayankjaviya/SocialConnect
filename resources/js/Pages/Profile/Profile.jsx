import React from "react";
import ProfileHeader from "./ProfileHeader";
import PostGrid from "./PostGrid";

import "../../../css/Profile/profile.css";

export default function Profile(props) {
    return (
        <div className="profile">
            <ProfileHeader />
            <PostGrid />
        </div>
    );
}
