import react from "react";
import "../../../css/Feed/PostFeed.css";
import { Link, router, usePage } from "@inertiajs/react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faHeart as faHeartRegular } from "@fortawesome/free-regular-svg-icons";
// import { faComment } from "@fortawesome/free-regular-svg-icons";
import { faHeart, faWifi, faWifi3 } from "@fortawesome/free-solid-svg-icons";
import { faComment } from "@fortawesome/free-solid-svg-icons";

const PostCards = (props) => {
    const { posts, followUser, myPost } = props;
    const { auth } = usePage().props;

    const handleLike = (postId, is_liked) => {
        router.post(
            "/like-post",
            { post_id: postId, like: is_liked },
            { preserveScroll: true }
        );
    };

    return (
        <>
            {posts.map((post) => (
                <div className="d-flex justify-content-center" key={post.id}>
                    <div className="post">
                        <div className="post-header">
                            <span className="d-flex align-items-center">
                                <img
                                    src={post.user.user_profile}
                                    alt=""
                                    height="35px"
                                    className="rounded-circle me-2"
                                />
                                <div>
                                    <span className="fw-bold">
                                        {post.user.name}
                                    </span>
                                    {!myPost && post.user.id != auth.id && (
                                        <span
                                            role="button"
                                            onClick={() =>
                                                followUser(
                                                    post.user.id,
                                                    !post.user.is_followed
                                                )
                                            }
                                            className={`ms-2 text-white fw-normal badge ${
                                                post.user.is_followed
                                                    ? "bg-success"
                                                    : "bg-info "
                                            }`}
                                        >
                                            {post.user.is_followed
                                                ? " Following"
                                                : " Follow"}
                                        </span>
                                    )}
                                </div>
                            </span>
                        </div>
                        <div
                            className="post-image"
                            style={{
                                backgroundImage: `url(${post.post_image})`,
                            }}
                        >
                            <img src={post.post_image} alt="Post" />
                        </div>
                        <div className="post-actions d-flex justify-content-start align-items-center">
                            <h5
                                role="button"
                                className="m-2"
                                onClick={() =>
                                    handleLike(post.id, !post.is_liked)
                                }
                            >
                                <FontAwesomeIcon
                                    icon={
                                        post.is_liked ? faHeart : faHeartRegular
                                    }
                                    className="me-1"
                                />
                                {post.likes_count}
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
        </>
    );
};

export default PostCards;
