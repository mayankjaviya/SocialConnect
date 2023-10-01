// ProfileHeader.js

import { faEdit } from "@fortawesome/free-regular-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { usePage } from "@inertiajs/react";
import React from "react";

function ProfileHeader(props) {
    const { auth, totalPosts, totalFollowers, totalFollowings } =
        usePage().props;

    return (
        <header className="profile-header d-lg-flex justify-content-center">
            <div className="col-lg-4 mb-2 mb-lg-0 d-flex align-items-center">
                {/* Profile Picture */}
                <img
                    src={auth.user_profile}
                    alt="Profile Picture"
                    className="profile-picture"
                />
                <div className="flex-column text-center">
                    <h3 className="align-middle">{auth.name}</h3>
                    <span className="text-muted">{auth.email}</span>
                </div>
            </div>
            {/* Profile Username */}
            <div className="container">
                <div className="row align-items-center">
                    <div className="col-lg-4 mb-2 mb-lg-0">
                        <div className="card profile-card py-3">
                            <div className="card-body d-flex justify-content-between">
                                <h4 className="card-title mb-0">Posts</h4>
                                <h5 className="mb-0">{totalPosts}</h5>
                            </div>
                        </div>
                    </div>
                    <div className="col-lg-4 mb-2 mb-lg-0">
                        <div className="card profile-card py-3">
                            <div className="card-body d-flex justify-content-between">
                                <h4 className="card-title mb-0">Followers</h4>
                                <h5 className="mb-0">{totalFollowers}</h5>
                            </div>
                        </div>
                    </div>

                    {/* Following Section */}
                    <div className="col-lg-4 mb-2 mb-lg-0">
                        <div className="card profile-card py-3">
                            <div className="card-body d-flex justify-content-between">
                                <h4 className="card-title mb-0">Following</h4>
                                <h5 className="mb-0">{totalFollowings}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    );
}

export default ProfileHeader;
