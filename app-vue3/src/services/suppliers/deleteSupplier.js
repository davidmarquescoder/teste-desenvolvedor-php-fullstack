import router from '@/router'
import axios from 'axios'

export default async function deleteSupplier(id) {
  return await axios
    .delete(`${import.meta.env.VITE_API_ENDPOINT_SUPPLIERS}/${id}`)
    .then((response) => {
      router.push('/')
      return response
    })
    .catch((error) => {
      router.push('/')
      return error.response.data.message
    })
}
