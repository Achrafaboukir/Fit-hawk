import React from 'react';
import { Container, Row, Col } from 'reactstrap';

export default function Footer() {
  return (
    <footer style={{ backgroundColor: '#fff', color: 'black', paddingTop: '50px', paddingBottom: '50px' }}>
      <Container>
        <Row>
          <Col md="3">
            <h4>About Us</h4>
            <p>We are an online clothing store offering a wide range of high-quality clothes and accessories at affordable prices.</p>
            <p><a href="#" style={{ color: '#00000' }}>Learn more &raquo;</a></p>
          </Col>
          <Col md="3">
            <h4>Quick Links</h4>
            <ul className="list-unstyled">
              <li><a href="#" style={{ color: '#000000' }}>Home</a></li>
              <li><a href="#" style={{ color: '#000000' }}>Shop</a></li>
              <li><a href="#" style={{ color: '#000000' }}>About Us</a></li>
              <li><a href="#" style={{ color: '#000000' }}>Contact Us</a></li>
            </ul>
          </Col>
          <Col md="3">
            <h4>Follow Us</h4>
            <ul className="list-unstyled fot" style={{ display: 'flex', justifyContent: 'space-between' }}>
              <li><a href="#"><i className="fab fa-facebook fa-lg" style={{ color: '#000000' }}>facebook</i></a></li><br/>
              <li><a href="#"><i className="fab fa-twitter fa-lg" style={{ color: '#000000' }}>instagram</i></a></li><br/>
              <li><a href="#"><i className="fab fa-instagram fa-lg" style={{ color: '#000000' }}>linkdenk</i></a></li><br/>
              <li><a href="#"><i className="fab fa-pinterest fa-lg" style={{ color: '#000000' }}>twiter</i></a></li><br/>
            </ul>
          </Col>
          <Col md="3">
            <h4>Contact Us</h4>
            <p>
              <strong>Address:</strong> Casablanca Ain choq, MORROCCO MAROC
            </p>
            <p>
              <strong>Email:</strong> <a href="fithawk@gmail.com" style={{ color: '#0000000' }}>infofithawk@gmail.com</a>
            </p>
            <p>
              <strong>Phone:</strong> +212 64 17 03 47 1
            </p>
          </Col>
        </Row>
      </Container>
    </footer>
  );
}
