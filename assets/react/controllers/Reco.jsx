import React from 'react';

export default function (props) {
    return <div className="card lg:card-side bg-base-100 shadow-xl p-6">
        {/* if user has a profil pic */}
                {/* <div className="avatar">
                    <div className="w-24 rounded-full">
                        <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                    </div>
                </div> */}
                {/* <div className="avatar placeholder">
                    <div className="bg-neutral text-neutral-content w-24 rounded-full">
                        <span className="text-3xl">D</span>
                    </div>
                </div> */}
                <div className="card-body">
                    <h2 className="card-title">{props.title}</h2>
                    <p>{props.content}</p>
                </div>
                <figure className="px-10 pt-10">
                <img
                    src={props.image}
                    alt={props.imageAlt}
                    className="rounded-xl" />
                </figure>


                <div></div>
            </div>


           
}