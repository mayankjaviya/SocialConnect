import React from "react";
import ProfileHeader from "./ProfileHeader";

import "../../../css/Profile/profile.css";
import Gallery from "./Gallery";
import Feed from "../Feed/Feed";

export default function Profile(props) {
    const { posts } = props;
    return (
        <div className="profile">
            <ProfileHeader />
            <div
                className="nav nav-tabs justify-content-center profile-nav border-bottom border-white"
                id="nav-tab"
                role="tablist"
            >
                <button
                    className="nav-link active rounded-0 rounded-top "
                    id="nav-home-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#tab-gallery"
                    type="button"
                    role="tab"
                    aria-controls="tab-gallery"
                    aria-selected="true"
                >
                    Gallery
                </button>
                <button
                    className="nav-link  rounded-0 rounded-top"
                    id="nav-profile-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#tab-posts"
                    type="button"
                    role="tab"
                    aria-controls="tab-posts"
                    aria-selected="false"
                >
                    Posts
                </button>
            </div>
            <div className="tab-content mt-2" id="myTabContent">
                <div
                    className="tab-pane fade show active"
                    id="tab-gallery"
                    role="tabpanel"
                    aria-labelledby="tab-gallery-tab"
                >
                    <Gallery />
                </div>
                <div
                    className="tab-pane fade"
                    id="tab-posts"
                    role="tabpanel"
                    aria-labelledby="tab-posts-tab"
                >
                    <Feed posts={posts} />
                </div>
            </div>
        </div>
    );
}
