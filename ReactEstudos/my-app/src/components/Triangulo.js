import { useRef } from 'react';
import { useFrame } from '@react-three/fiber';

// Componente para criar um cubo rotacionando
function RotatingBox() {
    // useRef permite acessar diretamente o objeto Three.js
    const meshRef = useRef();
  
    // Hook para rotacionar o cubo a cada frame
    useFrame(() => {
      if (meshRef.current) {
        meshRef.current.rotation.x += 0.01;
        meshRef.current.rotation.y += 0.01;
      }
    });
  
    return (
      <mesh ref={meshRef} position={[0, 0, 0]}>
        {/* Definindo a geometria do cubo */}
        <boxGeometry args={[4, 4, 4]} />
        {/* Definindo o material do cubo */}
        <meshStandardMaterial color="orange" />
      </mesh>
    );
  }

export default RotatingBox;