import react from 'react';
import './footer.css'; 
import facebook from './designs/facebook.png';
import 'bootstrap/dist/css/bootstrap.min.css';


export default function Footer(){

    return(
        <footer>
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <h4>About Us</h4>
        <p>We are an online clothing store offering a wide range of high-quality clothes and accessories at affordable prices.</p>
        <p><a href="#">Learn more &raquo;</a></p>
      </div>
      <div class="col-md-3 col-sm-6">
        <h4>Quick Links</h4>
        <ul class="list-unstyled">
          <li><a href="#">Home</a></li>
          <li><a href="#">Shop</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-6">
        <h4>Follow Us</h4>
        <ul class="list-unstyled">
          <li><a href="#"><i class="fab fa-facebook"></i> Facebook</a></li>
          <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
          <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
          <li><a href="#"><i class="fab fa-pinterest"></i> Pinterest</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-6">
        <h4>Contact Us</h4>
        <p><strong>Address:</strong> Casablanca Ain choq, MORROCCO MAROC</p>
        <p><strong>Email:</strong> <a href="fithawk@gmail.com">infofithawk@gmail.com</a></p>
        <p><strong>Phone:</strong> +212 64 17 03 47 1</p>
      </div>
    </div>
  </div>
        
</footer>

    )
}