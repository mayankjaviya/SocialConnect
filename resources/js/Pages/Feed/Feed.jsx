import React, { useState } from "react";
import "../../../css/Feed/PostFeed.css";
import { Link } from "@inertiajs/react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
// import { faHeart } from "@fortawesome/free-regular-svg-icons";
// import { faComment } from "@fortawesome/free-regular-svg-icons";
import { faHeart } from "@fortawesome/free-solid-svg-icons";
import { faComment } from "@fortawesome/free-solid-svg-icons";

function Feed(props) {
    const { posts } = props;

    return (
        <div className="post-feed">
            {posts.map((post) => (
                <div className="d-flex justify-content-center">
                    <div className="post" key={post.id}>
                        <div className="post-header">
                            <span className="d-flex fw-bold align-items-center">
                                <img
                                    src={post.user.user_profile}
                                    alt=""
                                    height="35px"
                                    className="rounded-circle me-2"
                                />
                                {post.user.name}
                            </span>
                        </div>
                        <div className="post-image">
                            <img src={post.post_image} alt="Post" />
                        </div>
                        <div className="post-actions d-flex justify-content-start align-items-center">
                            <h5
                                role="button"
                                className="m-2"
                                onClick={() => handleLike(post.id)}
                            >
                                <FontAwesomeIcon
                                    icon={faHeart}
                                    className="me-1"
                                />
                                10
                            </h5>
                            <h5
                                role="button"
                                className="m-2"
                                onClick={() => handleLike(post.id)}
                            >
                                <FontAwesomeIcon
                                    icon={faComment}
                                    className="me-1"
                                />
                                10
                            </h5>
                        </div>
                        <div className="post-caption my-3">
                            <span className="fw-bold me-3 ms-2">
                                {post.user.name}:
                            </span>
                            {post.caption}
                        </div>
                    </div>
                </div>
            ))}
        </div>
    );
}

export default Feed;
