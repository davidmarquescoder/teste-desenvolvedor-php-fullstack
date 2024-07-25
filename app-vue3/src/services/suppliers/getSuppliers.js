import axios from 'axios'

export default async function getSuppliers(page = 1) {
  return await axios
    .get(`${import.meta.env.VITE_API_ENDPOINT_SUPPLIERS}?page=${page}`, {
      headers: {
        'Content-Type': 'application/json',
        Accept: 'application/json'
      },
      withCredentials: false
    })
    .then((response) => {
      return response.data
    })
    .catch((error) => {
      console.log(error.response.data.message)
    })
}
