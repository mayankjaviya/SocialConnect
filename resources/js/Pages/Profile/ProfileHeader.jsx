// ProfileHeader.js

import { faEdit } from "@fortawesome/free-regular-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { usePage } from "@inertiajs/react";
import React from "react";

function ProfileHeader(props) {
    const { auth, posts_count } = usePage().props;

    return (
        <header className="profile-header">
            {/* Profile Picture */}
            <img
                src={auth.user_profile}
                alt="Profile Picture"
                className="profile-picture"
            />

            {/* Profile Username */}
            <div className="container">
                <div className="row">
                    {/* Follower Section */}
                    <div className="col-md-3 mb-2 mb-md-0 d-flex align-items-center">
                        <h3 className="align-middle">{auth.name}</h3>
                    </div>
                    <div className="col-md-3 mb-2 mb-md-0">
                        <div className="card">
                            <div className="card-body">
                                <h5 className="card-title">Posts</h5>
                                {posts_count}
                            </div>
                        </div>
                    </div>
                    <div className="col-md-3 mb-2 mb-md-0">
                        <div className="card">
                            <div className="card-body">
                                <h5 className="card-title">Followers</h5>
                                300
                            </div>
                        </div>
                    </div>

                    {/* Following Section */}
                    <div className="col-md-3 mb-2 mb-md-0">
                        <div className="card">
                            <div className="card-body">
                                <h5 className="card-title">Following</h5>
                                100
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    );
}

export default ProfileHeader;
