document.addEventListener("DOMContentLoaded", () => {
    const pcList = document.getElementById("pc-list");
    let pcCount = 0;

    // Add PC button
    document.getElementById("add-pc-btn").addEventListener("click", () => {
        pcCount++;
        const pcCard = document.createElement("div");
        pcCard.classList.add("pc-card");
        pcCard.setAttribute("id", `pc-${pcCount}`);

        pcCard.innerHTML = `
            <div class="pc-info">
                <h3>PC ${pcCount}</h3>
                <p>00:00:00</p>
            </div>
            <button class="add-time-btn" onclick="addTime(${pcCount})">Tambah waktu</button>
        `;
        pcList.appendChild(pcCard);
    });

    // Remove PC button
    document.getElementById("remove-pc-btn").addEventListener("click", () => {
        if (pcCount > 0) {
            const pcCard = document.getElementById(`pc-${pcCount}`);
            pcList.removeChild(pcCard);
            pcCount--;
        }
    });
});

// Add time functionality
function addTime(pcId) {
    const options = [15, 30, 60];
    const selectedTime = prompt(`Tambah waktu (pilihan: ${options.join(", ")} menit):`);
    const time = parseInt(selectedTime);

    if (options.includes(time)) {
        alert(`Waktu ${time} menit berhasil ditambahkan ke PC ${pcId}.`);
    } else {
        alert("Pilihan waktu tidak valid.");
    }
}
