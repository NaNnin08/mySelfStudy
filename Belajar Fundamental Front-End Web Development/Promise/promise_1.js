const state = {
    isCoffeMakerReady: true,
    seedStock: {
        arabica: 250,
        robusta: 60,
        liberica: 80
    }
};

const getSeeds = (type, miligrams) => {
    return new Promise((resolve, reject) => {
        if(state.seedStock[type] >= miligrams) {
            state.seedStock[type] -= miligrams;
            resolve("Biji kopi didapatkan")
        } else {
            reject("Maaf stock kopi habis")
        }
    });
};

const makeCoffe = seeds => {
    return new Promise((resolve, reject) => {
        if(state.isCoffeMakerReady) {
            resolve("Kopi berhasil dibuat!");
        } else {
            reject("Maaf mesin tidak dapat digunakan")
        }
    });
};

const servingToTable = coffe => {
    return new Promise(resolve => {
        resolve("Pesanan kopi sudah selesai");
    });
};

function reserveACoffe(type, miligrams) {
    getSeeds(type, miligrams)
    .then(makeCoffe)
    .then(servingToTable)
    .then(resolvedValue => {
        console.log(resolvedValue);
    })
    .catch(rejectedReason => {
        console.log(rejectedReason);
    })
} //Promise dengan style Async

async function reserveACoffe_2(type, miligrams) {
    try {
        const seeds = await getSeeds(type, miligrams);
        const coffe = await makeCoffe(seeds);
        const result = await servingToTable(coffe);
        console.log(result);
    } catch(rejectedReason) {
        console.log(rejectedReason);
    }
} //Membuat Promise dengan menggunakan style Sync

reserveACoffe_2("liberica", 90);