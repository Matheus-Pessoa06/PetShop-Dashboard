import logo from './logo.svg';
import './App.css';
import handleClick from './components/Click';
import { useState } from 'react';
import Filho from './components/Filho';
import Textarea from './components/Textarea'
import { Canvas } from '@react-three/fiber';
import RotatingBox from './components/Triangulo';


function App() {
  
  
  const [index, setIndex] = useState(0);
  const [inputValue, setInputValue] = useState('');

  const handleInputChange = (e) =>{
    setInputValue(e.target.value);
  }

  function Cube() {
    return (
      <mesh>
        <boxGeometry args={[4, 4, 4]} />
        <meshStandardMaterial color="black" />
      </mesh>
    );
  }
 
  return (

    <div className="App">

      <header>
       <input type="text" 
        value={inputValue}
        onChange={handleInputChange}
        placeholder="Digite algo"
       />

        <button onClick={handleClick}>Aperte Aqui! </button>
        <button onClick={() => setIndex(index + 1)}>Clicks</button>
        
        <span> {inputValue}</span>

        <Filho name="Matheus" idade="24" email="matheuspessoa2010@gmail.com"/>

        <Textarea type="email" placeholder="Digite seu email"/>
        <Textarea type="password" placeholder="Senha"/>
        <Textarea type="text" placeholder="Nome"/>
        
        <Canvas>
          <ambientLight />
          <pointLight position={[10, 10, 10]} />
          <Cube />
        </Canvas>

        <Canvas>
          {/* Luz ambiente */}
          <ambientLight intensity={0.5} />
          {/* Luz pontual */}
          <pointLight position={[10, 10, 10]} />
          {/* Cubo rotacionando */}
          <RotatingBox />
        </Canvas>

        <Canvas style={{ width: '10vw', height: '10vh' }}>
          {/* Luz ambiente */}
          <ambientLight intensity={2.18} />
          {/* Luz pontual */}
          <pointLight position={[4, 4, 4]} />
          {/* Cubo rotacionando */}
          <RotatingBox />
        </Canvas>
      </header>
    
    </div>
  );
}

export default App;
