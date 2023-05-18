const formData = new FormData();
const searchBtn = document.getElementById("searchUser");
const tableBody = document.getElementById("userTableBody");


searchBtn.addEventListener("input", (e)=>{
    formData.append('searchValue', e.target.value);
    axios.post('/emon', formData).then(res=>{
        console.log(res.data)
        const resultData = res.data;
        let rana = ""
        for (let i = 0; i < resultData.length; i++) {
            rana = rana + `
        <tr>
        <td>#${resultData[i].id}</td>
        <td>
            <div class="d-flex align-items-center gap-3">
            <div class="product-box border">
                <img src="assets/images/products/11.png" alt="">
            </div>
            <div class="product-info">
                <h6 class="product-name mb-1">${resultData[i].fName} ${resultData[i].lName}</h6>
            </div>
            </div>
        </td>
        <td>Apr 8, 2021</td>
        <td>${resultData[i].created_at}</td>
        <td>
            <div class="d-flex align-items-center gap-3 fs-6">
            <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom"
                title="" data-bs-original-title="View detail" aria-label="Views">
                <ion-icon name="eye-sharp"></ion-icon>
            </a>
            <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom"
                title="" data-bs-original-title="Edit info" aria-label="Edit">
                <ion-icon name="pencil-sharp"></ion-icon>
            </a>
            <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom"
                title="" data-bs-original-title="Delete" aria-label="Delete">
                <ion-icon name="trash-sharp"></ion-icon>
            </a>
            </div>
        </td>
        </tr>
        `
        }

        tableBody.innerHTML = rana;

    });
})

