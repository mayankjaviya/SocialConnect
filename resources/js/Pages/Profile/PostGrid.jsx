// PostGrid.js

import { usePage } from "@inertiajs/react";
import React from "react";

function PostGrid() {
    const { posts } = usePage().props;
    return (
        <section className="gallery">
            {posts &&
                posts.map((post) => {
                    return (
                        <div className="image mb-2">
                            <img
                                src={post.post_image}
                                alt="image"
                                className="rounded-2"
                            />
                        </div>
                    );
                })}
        </section>
    );
}

export default PostGrid;
