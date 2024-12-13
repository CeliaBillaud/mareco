import React from 'react';

export default function (props) {
    return <div className="hero bg-base-200 min-h-screen">
            <div className="hero-content flex-col lg:flex-row-reverse">
            <img
                src={props.image}
                className="max-w-sm rounded-lg" />
            <div>
                <h1 className="text-5xl font-bold">{props.title}</h1>
                <p className="py-6">
                {props.content}
                </p>
                <button className="btn btn-primary text-white">{props.button}</button>
            </div>
            </div>
        </div>;
}
