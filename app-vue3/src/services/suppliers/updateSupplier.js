import router from '@/router'
import axios from 'axios'

export default async function updateSupplier(id, formData) {
  return await axios
    .put(`${import.meta.env.VITE_API_ENDPOINT_SUPPLIERS}/${id}`, formData)
    .then((response) => {
      router.push('/')
      return response.data
    })
    .catch((error) => {
      router.push(`/edit/${id}`)
      return error.response.data.message
    })
}
