import React from "react";
import Reco from "./Reco";

export default function RecoList({recos}) {
    return <div className="flex flex-col gap-4">
        {recos.map((reco, index) => (
            <Reco
                key={index}
                image={reco.image}
                imageAlt={reco.imageAlt}
                userName={reco.userName}
                title={reco.title}
                content={reco.content}
            />
        ))

        }
    </div>
}