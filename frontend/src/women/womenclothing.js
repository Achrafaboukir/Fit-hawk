import React from "react";
import  { useState, useEffect } from 'react';
import './womenclothes.css';
import Nav from "../nav";
import man from '../designs/man.jpg';
import axios from "axios";
import Footer from "../footer";

export default function Womenclothes(){
  const [products, setProducts] = useState([]);
  const [pants, setpants] = useState([]);
  const [jacket, setjacket] = useState([]);

  

  useEffect(() => {
    console.log('lfksd')
    axios
      .get('http://127.0.0.1:8000/api/womenclothes')
      .then(response => {
        // Check that the response data is an array before setting the state
        if (response.data) {
          setProducts(response.data.womenclothes);
          console.log(response.data);
          
        }
      })
      .catch(error => {
        console.log(error);
      });
  }, []);
  useEffect(() => {
    console.log('lfksd')
    axios
      .get('http://127.0.0.1:8000/api/womenpants')
      .then(response => {
        // Check that the response data is an array before setting the state
        if (response.data) {
          setpants(response.data.womenpants);
          console.log(response.data);
          
        }
      })
      .catch(error => {
        console.log(error);
      });
  }, []);
  useEffect(() => {
    axios
      .get('http://127.0.0.1:8000/api/womenjacket')
      .then(response => {
        // Check that the response data is an array before setting the state
        if (response.data) {
          setjacket(response.data.womenjacket);
          console.log(response.data);
          
        }
      })
      .catch(error => {
        console.log(error);
      });
  }, []);
  
    return(
        <div>
            <Nav/>
            <div className="container">
      <div className="sidebar">
        <div className="tops">
        <p className="womenall">women - ALL</p>
        <h1>Shop All</h1>
        <h5><a>Tops</a></h5>
        <p><a>Shirts</a></p>
        <p><a>Polos</a></p>
        <p><a>Long sleeve shirts</a></p>
        <p><a>Sweatshirts & Layers</a></p>
        <p><a>Button Up Shirts</a></p>
        <p><a>All Tops</a></p>
        </div>
        <div className="bottoms">
        <h5><a>BOTTOMS</a></h5>
        <p><a>Joggers</a></p>
        <p><a>Pants</a></p>
        <p><a>Sweatpants</a></p>
        <p><a>All Bottoms</a></p>
        </div>
        <div className="outerwear">
        <h5><a>OUTERWEAR</a></h5>
        <p><a>Jackets</a></p>
        <p><a>Sherpa</a></p>
        <p><a>Vests</a></p>
        <p><a>All Outerwear</a></p>
        </div>
        <div className="accessoiries">
        <h5><a>ACCESSORIES</a></h5>
        <p><a>Headwear</a></p>
        <p><a>Gift Card</a></p>
        <p><a>All women</a></p>
        
        </div>

        
      </div>
      
      <div className="main-content mainn">
        <h1 className="shoptitle">Shop Shirts</h1>
      <div className="product-cart">
        <div>
        <img src={man} />
                
                <p>Our shirts are what we're famous for designed for the modern work setting.
                     Buttery soft, tailored fit, and versatile fabric to keep you comfortable throughout your day. </p>
                
        </div>
        
        

      </div><div className="nextto">
  {products.length > 0 && (
    <div>
      <img src={products[0].image} alt={products[0].name} className="productimage" style={{ width: '100%' }} />
      <p style={{color:"rgb(57, 58, 58)"}}>{products[0].brand}</p>
      <h5>{products[0].name}</h5>
      <h6>{products[0].price} DH</h6>
    </div>
  )}
</div><br></br><br/>
<div className="product-grid">
  
  {products.slice(1, 4).map((product, index) => (
    <div className="grid">
      <img src={product.image} alt={product.name} />
      <p style={{color:"rgb(57, 58, 58)"}}>{product.brand}</p>
      <h5 style={{color:"black"}}>{product.name}</h5>
      <h6>{product.price} DH</h6>
    </div>
  ))}
</div><br/><br/>
<div className="product-grid">
  {products.slice(5, 7).map((product, index) => (
    <div className="grid">
      <img src={product.image} alt={product.name} />
      <p style={{color:"rgb(57, 58, 58)"}}>{product.brand}</p>
      <h5>{product.name}</h5>
      <h6>{product.price} DH</h6>
    </div>
  ))}
  <div className="colored-background">
    <a href="/another-page">See All</a>
  </div>
</div>


      </div>
    </div>
    <br/><br/><br/><br/><br/><br/><br/><br></br>
    <div className="main-content secondmain">
        <h1 className="shoptitle">Shop BOTTOMS</h1>
      <div className="product-cart">
        <div>
        <img src="https://i.pinimg.com/736x/1d/b0/7c/1db07c55047b5ab4fb0c95aeae042b5d.jpg" />
                
                <p>Our shirts are what we're famous for designed for the modern work setting.
                     Buttery soft, tailored fit, and versatile fabric to keep you comfortable throughout your day. </p>
                
        </div>
        
        

      </div><div className="nextto">
  {pants.length > 0 && (
    <div>
      <img src={pants[0].image} alt={pants[0].name} className="productimage" style={{ width: '100%' }} />
      <p style={{color:"rgb(57, 58, 58)"}}>{pants[0].brand}</p>
      <h5>{pants[0].name}</h5>
      <h6>{pants[0].price} DH</h6>
    </div>
  )}
</div><br></br><br/><br/>
<div className="product-grid">
  {pants.slice(1, 4).map((pants, index) => (
    <div className="grid">
      <img src={pants.image} alt={pants.name} />
      <p style={{color:"rgb(57, 58, 58)"}}>{pants.brand}</p>
      <h5 style={{color:"black"}}>{pants.name}</h5>
      <h6>{pants.price} DH</h6>
    </div>
  ))}
</div><br/><br/>
<div className="product-grid">
  {pants.slice(5, 7).map((pants, index) => (
    <div className="grid">
      <img src={pants.image} alt={pants.name} />
      <p style={{color:"rgb(57, 58, 58)"}}>{pants.brand}</p>
      <h5>{pants.name}</h5>
      <h6>{pants.price} DH</h6>
    </div>
  ))}
  <div className="colored-background">
    <a href="/another-page">See All</a>
  </div>
</div>


      </div>
      <div className="main-content thirdmain">
        <h1 className="shoptitle">Shop OUTERWEAR</h1>
      <div className="product-cart">
        <div>
        <img src="https://i.pinimg.com/564x/08/28/3b/08283bb0fd7e37f5a9531dc7d4f532c7.jpg" />
                
                <p>Our shirts are what we're famous for designed for the modern work setting.
                     Buttery soft, tailored fit, and versatile fabric to keep you comfortable throughout your day. </p>
                
        </div>
        
        

      </div><div className="nextto">
  {jacket.length > 0 && (
    <div>
      <img src={jacket[0].image} alt={jacket[0].name} className="productimage" style={{ width: '100%' }} />
      <p style={{color:"rgb(57, 58, 58)"}}>{jacket[0].brand}</p>
      <h5>{jacket[0].name}</h5>
      <h6>{jacket[0].price} DH</h6>
    </div>
  )}
</div><br></br><br/>
<div className="product-grid">
  {jacket.slice(1, 4).map((jacket, index) => (
    <div className="grid">
      <img src={jacket.image} alt={jacket.name} />
      <p style={{color:"rgb(57, 58, 58)"}}>{jacket.brand}</p>
      <h5 style={{color:"black"}}>{jacket.name}</h5>
      <h6>{jacket.price} DH</h6>
    </div>
  ))}
</div><br/><br/>
<div className="product-grid">
  {jacket.slice(5, 7).map((jacket, index) => (
    <div className="grid">
      <img src={jacket.image} alt={jacket.name} />
      <p style={{color:"rgb(57, 58, 58)"}}>{jacket.brand}</p>
      <h5>{jacket.name}</h5>
      <h6>{jacket.price} DH</h6>
    </div>
  ))}
  <div className="colored-background">
    <a href="/another-page">See All</a>
  </div>
</div>


      </div>
    <br></br><br/>
    <div className="footer">
    <Footer/>
</div>

        </div>

    )
}