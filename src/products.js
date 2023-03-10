import React, { useState, useEffect } from "react";
import axios from "axios";
import "./ProductCard.css";
import "animate.css";
import next from './designs/next.png';
import left from './designs/left-arrow.png';
import mockup from './designs/mockup.png' ;
import model1 from './designs/model1.jfif';
import model2 from './designs/model2.jfif';
import model3 from './designs/model3.jfif';
import model4 from './designs/model4.jfif';
import model5 from './designs/model5.jfif';
import Footer from "./footer";
export default function ProductCard() {
  const [products, setProducts] = useState([]);
  const [startIndex, setStartIndex] = useState(0);
  const [startwIndex, setStartwIndex] = useState(0);

  useEffect(() => {
    axios.get("http://localhost/insertToSql/filter.php").then((response) => {
      setProducts(response.data);
    });
  }, []);

  const handleNext = () => {
    setStartIndex((prevStartIndex) => prevStartIndex + 1);
  };
  const whandleNext = () => {
    setStartwIndex((prevStartwIndex) => prevStartwIndex + 1);
  };

  const handlePrev = () => {
    setStartIndex((prevStartIndex) => prevStartIndex - 1);
  };
  const whandlePrev = () => {
    setStartwIndex((prevStartwIndex) => prevStartwIndex - 1);
  };

  const visibleProducts = products.slice(startIndex, startIndex + 4);
  const wvisibleProducts = products.slice(startwIndex, startwIndex + 4);

  return (
    <div>
      <br/>
      <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet"></link>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet"/>

      <div className="product-card-container">
        <div className="shopMen">
          <h1>Shop men</h1>
          <button className="bn">Shop All</button>
        </div><br/><br/>
        <div className="product-card">
          <button
            disabled={startIndex === 0}
            className="btn-prev prev"
            onClick={handlePrev}
          >
            <img src={left}/>
          </button>
          {visibleProducts.map((product, index) => {
            return (
              <div
                key={product.id}
                className={`animate__animated ${
                  index === 4 ? "animate__fadeInRight" : ""
                }`}
              >
                <img src={product.image} alt={product.name} />
                <p>{product.brand}</p>
                <h5>{product.name}</h5>
                <h6>{product.price} DH</h6>
              </div>
            );
          })}
          <button
            disabled={startIndex + 1 >= products.length}
            className="btn-next next"
            onClick={handleNext}
          >
            <img src={next}/>
          </button>
        </div>
      </div><br/><br/><br/>

      <div className="product-card-container">
        <div className="shopWomen">
          <h1 id="womens">Shop women</h1>
          <button className="bnw">Shop All</button>
        </div><br/><br/>
        <div className="product-card">
          <button
            disabled={startIndex === 0}
            className="btn-prev prev"
            onClick={whandlePrev}
          >
            <img src={left}/>
          </button>
          {wvisibleProducts.map((product, index) => {
            return (
              <div
                key={product.id}
                className={`animate__animated ${
                  index === 4 ? "animate__fadeInRight" : ""
                }`}
              >
                <img src={product.image} alt={product.name} />
                <p>{product.brand}</p>
                <h5>{product.name}</h5>
                <h6>{product.price} DH</h6>
              </div>
            );
          })}
          <button
            disabled={startIndex + 1 >= products.length}
            className="btn-next next"
            onClick={whandleNext}
          >
            <img src={next}/>
          </button>
        </div>
      </div>
    
<br/><br/>
    <h1 className="generator">Mockup Generator</h1><br/>
    <div className="mockup-container">
  
  <div className="mockup-wrapper">
    <div className="mockup-inline"><h2>The Best Print on Demand in morroco 
    Just put your design and we will give 
    the best and high quality mockups</h2><br/>
    <button >Print your Art</button></div>
    <img src={mockup} alt="Mockup" className="mockup" />
    
  </div>
</div><br></br><br/><br/>
    <div class="text-container">
      <h1># F I T H A W K </h1>
        <br/><br/>
      <h2 class="moving-text">“ Buy now and thank yourself later „</h2>
    </div><br/><br/><br/>
    
    <div style={{ display: "flex", flexDirection: "column", alignItems: "center" }}>
  <div style={{ display: "flex", justifyContent: "center", width: "700px" }}>
    <img src={model1} alt="image1" style={{ width: "400px", margin: "0 10px" }} />
    <img src={model2} alt="image2" style={{ width: "400px", margin: "0 10px" }} />
    <img src={model3} alt="image3" style={{ width: "400px", margin: "0 10px" }} />
  </div>
  <div style={{ display: "flex", justifyContent: "center", width: "700px" ,  height:'600px'}}>
    <img src={model4} alt="image4" style={{ width: "610px", margin: "10px" }} />
    <img src={model5} alt="image5" style={{ width: "610px", margin: "10px" }} />
  </div>
</div>


<br/><br/>
<Footer/>
    </div>
  );
}
