import * as React from 'react';
import CDCard from './CentroDistribucionCard'


const Home = () => {
    return (
        <div style={{ margin: 100 }}>
            <h2>Proyecto Semestral Desarrollo Web</h2>
            <h3>Martín Araneda - Manuel Yáñez</h3>
            <h1>Centros de Distribución</h1>
            <CDCard
                name={"Centro de distribucion 1"}
                description={"Probando descripcion"}
            />
            <CDCard
                name={"Centro de distribucion 2"}
                description={"Probando descripcion con algunos detalles extra a ver si cambia en algo"}
            />
        </div>
    );
};
export default Home;