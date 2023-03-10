import 'bootstrap/dist/css/bootstrap.min.css';
import black from './designs/black.png';
import 'bootstrap/dist/js/bootstrap.bundle.min';
import './navcss.css'

export default function Nav(){
  window.addEventListener('scroll', function() {
    var nav = document.querySelector('nav');
    nav.classList.toggle('scrolled', window.scrollY > 0);
  })

    return(
      <nav class="navbar navbar-expand-lg navbar-light navc" style={{'height':'80px'}}>
       <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet"></link>

      <a class="navbar-brand logo" href="#"><img src={black} style={{'width':'90px' , 'marginLeft':'30px'}}/></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav" style={{'marginLeft':'70px' }}>
          <li class="nav-item active">
            <a class="nav-link active" href="#">Men</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Women</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Generator</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a className="nav-link active "  href="#"><span style={{'width':'80px'}}>Sign In</span></a>
          </li>
          
        </ul>
        
        
      
      <button class="btn bg-dark  text-white " type="submit" style={{'marginLeft':'780px'}}>Bag <span className='num' >0</span> </button>
      </div>
      
    </nav>
    )
}