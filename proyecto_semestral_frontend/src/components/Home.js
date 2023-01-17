import * as React from 'react';
import { useEffect, useState } from 'react';
import CDCard from './CentroDistribucionCard';
import axios from 'axios';
import { FormControl } from '@mui/material';
import { InputLabel } from '@mui/material';
import { Select } from '@mui/material';
import { MenuItem } from '@mui/material';
import Button from '@mui/material/Button';

const endpoint = 'http://localhost:8000/api'

const Home = () => {

    const [centroDist, setCentroDist] = useState([]);
    const [selectedCentroDist, setSelectedCentroDist] = useState("");


    useEffect(() => {
        getCentroID();
    }, []);

    async function getCentroID() {
        try {
            const response = await axios.get(`${endpoint}/ApiRoutes/listaCD`);
            if (response.status === 200) {
                console.log(response.data);
                setCentroDist(response.data);
            }
        }
        catch (error) {
            console.error(error);
        }
    }

    const handleChangeCentroDist = (event) => {
        setSelectedCentroDist(event.target.value);
    };

    async function mandarCD() {

        try {
            const response = await axios.post(`${endpoint}/ApiRoutes/mostrarStock`, selectedCentroDist);
            if (response.status === 200) {
                alert("Cantidad de stock disponible" + response.data);
            }
        }
        catch (error) {
            console.error(error);
        }

    }

    return (
        <div style={{ margin: 100 }}>
            <h2>Proyecto Semestral Desarrollo Web</h2>
            <h3>Martín Araneda - Manuel Yáñez</h3>
            <h1>Centros de Distribución</h1>
            <Button
                variant="contained"
                onClick={mandarCD}
            >
                Hola
            </Button>
            <FormControl fullWidth>
                <InputLabel id="demo-simple-select-label">Codigo Centro Distribución</InputLabel>

                <Select
                    labelId="demo-simple-select-label"
                    id="demo-simple-select"
                    value={selectedCentroDist}
                    label="Codigo Centro Distribución"
                    onChange={handleChangeCentroDist}
                >
                    {
                        centroDist.map((centro) => (
                            <MenuItem
                                key={centro.id}
                                value={centro.id}>{centro.cd_codigo}</MenuItem>
                        ))
                    }
                </Select>
            </FormControl>
            <CDCard
                name={"Centro de distribucion 1"}
                description={"Probando descripcion"}
            />
            <CDCard
                name={"Centro de distribucion 2"}
                description={"Probando descripcion con algunos detalles extra a ver si cambia en algo"}
            />
        </div >
    );
};
export default Home;