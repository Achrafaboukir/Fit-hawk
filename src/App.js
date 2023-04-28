

import Nav from './nav';
import Page1 from './firstpage';
import React from 'react';
import ProductCard from './firstpageproducts';
import Menclothes from './men/menclothing';
import Womenclothes from './women/womenclothing';
function App() {
  return (
    <div>
      
       
      {/*<Page1/> 
      <ProductCard/>
      <Womenclothes/>*/}
     <Menclothes/>
    </div>
  );
}

export default App;
