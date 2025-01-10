import React from 'react';

export default function (props) {
    return <div className="hero bg-base-200 ">
            <div className="hero-content flex-col lg:flex-row-reverse">
            <img
                src={props.image}
                alt={props.imageAlt}
                className="max-w-sm rounded-lg hidden md:block" />
            <div>
                <h1 className="text-5xl font-bold">{props.title}</h1>
                <p className="py-6">
                {props.content}
                </p>
                <a className="btn btn-primary text-white" href={props.link}>{props.button}</a>
            </div>
            </div>
        </div>;
}
