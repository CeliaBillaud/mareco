import React from 'react';

export default function (props) {
    return <article className="flex flex-col sm:flex-row gap-4 items-center w-full bg-white py-6 px-6 border border-gray-200 rounded-md">
                <div className="sm:h-48 sm:w-72 relative flex items-center object-cover rounded-xl overflow-hidden">
                            <img
                                src={props.image}
                                alt={props.imageAlt}
                             />
                </div>
                <div className='flex flex-col w-5/6'>
                    <div className="flex items-center gap-x-1 text-xs">
                        <a className="relative z-30 group" href="/">
                            <span className="flex items-center justify-center gap-2">
                                <div className="text-white h-8 w-8 rounded-full ring-2 ring-white flex items-center justify-center font-bold bg-black">J</div>
                            <span className="group-hover:text-violet-700">{props.userName}</span>
                            <time className="text-gray-500 text-xs">{props.date}</time>
                            </span>
                        </a>
                    </div>

                    <div className="flex justify-between items-center w-full">
                        <h3 className="mt-1 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                            <span className="text-2xl font-bold">{props.title}</span>
                        </h3>
                    </div>
                    
                    <p className='mt-2 line-clamp-3 text-sm leading-6 text-gray-600'>{props.content}</p>
                </div>
                
            </article>    

                    
                            
                                    
                                    
                                                                
            


           
}