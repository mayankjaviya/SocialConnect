import React, { useState } from "react";
import PostCards from "../Templates/PostCards";
import { router } from "@inertiajs/react";

function Feed(props) {
    const { posts } = props;

    const followUser = (userId, follow = true) => {
        router.post(
            "/follow",
            { follow: follow, user_id: userId },
            { preserveScroll: true }
        );
    };

    return (
        <div className="post-feed">
            {posts && <PostCards posts={posts} followUser={followUser} />}
        </div>
    );
}

export default Feed;
