// PostGrid.js

import { usePage } from "@inertiajs/react";
import React from "react";

function Gallery() {
    const { posts } = usePage().props;
    return (
        <section className="gallery pt-0 mt-2">
            {posts &&
                posts.map((post) => {
                    return (
                        <div className="image mb-2" key={post.id}>
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

export default Gallery;
