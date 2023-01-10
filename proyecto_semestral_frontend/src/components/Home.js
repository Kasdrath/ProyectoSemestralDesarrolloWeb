import * as React from 'react';
import {useEffect, useState} from 'react';
import CDCard from './CentroDistribucionCard';
import axios from 'axios';
// eslint-disable-next-line
//import {Link} from 'react-router-dom';

const endpoint = 'http://127.0.0.1:8000/api'

const Home = () => {

    // const [centroDist, setCentroDist] = useState([])
    // useEffect ( ()=> {
    //     getAllCentroDist()
    // }, [])
    // const getAllCentroDist = async () => {
    //     const response = await axios.get(`${endpoint}/ApiRoutes/listaCD`)
    //     console.log("Listando centros de distribucion");
    //     setCentroDist(response.data)
    // }

    const ShowCentroDist = () => {
        const [centroDist, setCentroDist] = useState([])
        useEffect ( ()=> {
            getAllCentroDist()
        }, [])
        const getAllCentroDist = async () => {
            const response = await axios.get(`${endpoint}/listaCD`)
            setCentroDist(response.data)
        }       
    }

    return (
        <div style={{ margin: 100 }}>
            <h2>Proyecto Semestral Desarrollo Web</h2>
            <h3>Martín Araneda - Manuel Yáñez</h3>
            <h1>Centros de Distribución</h1>
            <h4>{ShowCentroDist()}</h4>
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