
const identitasInput = document.querySelector("#identitas")
const noIdentitas = document.querySelector("#no-identitas")
const lampiranIdentitas = document.querySelector("#lampiran-identitas")
identitasInput.addEventListener("input", function () {
    noIdentitas.removeAttribute("disabled")
    noIdentitas.value = ""

    lampiranIdentitas.removeAttribute("disabled")
})
