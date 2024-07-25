import router from '@/router'
import axios from 'axios'

export default async function postSupplier(formData) {
  return await axios
    .post(import.meta.env.VITE_API_ENDPOINT_SUPPLIERS, formData)
    .then((response) => {
      router.push('/')
      console.log('Formulário enviado com sucesso:', response.data)
    })
    .catch((error) => {
      router.push('/register')
      console.log(error.response.data.message)
    })
}
