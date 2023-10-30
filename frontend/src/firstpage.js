import React from "react";
import  { useState, useEffect } from 'react';
import './page1.css';
import 'bootstrap/dist/css/bootstrap.min.css';
import Nav from "./nav";
export default function Page1(){
    const [products, setProducts] = useState([]);

    useEffect(() => {
      fetch('http://localhost/insertToSql/filter.php')
        .then(response => response.json())
        .then(data => setProducts(data))
        .catch(error => console.error(error));
    }, []);
    return(
        <div >
       <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet"></link>

            <div class="background-image">
            <div className="nn">
            <Nav/></div>
                <div className="all">
                <h1 className="fit"><strong>F I  T H A W K</strong></h1><br/>
                <h4 className="tail">S-M-L-XL...</h4><br/>
                <h5 className="fithawk">Experience the pinnacle of athletic performance with Fithawk Sport,
                 the ultimate destination for high-quality, innovative sportswear. 
                 From moisture-wicking fabrics to advanced compression technology</h5><br/><br/>
                <button className="btn btn-danger addtobag">Add to bag</button>
                <p className="copy" style={{color : "black" , marginLeft:'-380px', marginTop:'130px'}}> &copy; Copyright 2023</p>
            </div>
                
            </div>
        <br/><br/>
        <div></div>
        </div>
    )
}