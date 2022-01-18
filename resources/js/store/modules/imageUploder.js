import axios from "axios";
export default {
    actions: {
        async fileInputChange(context, files) {
            let fileList = Array.from(files);
            context.commit('addFileList', fileList);
            for (let item of fileList) {
                await context.dispatch('uploadFile', item);
            }
        },
        async uploadFile(context, item) {
            let form = new FormData();
            form.append('image', item);

            await axios.post('/api/image/upload', form, {
                onUploadProgress: (itemUpload) => {
                    console.log(item.name);
                    let loadingFile = {
                        progress: Math.round((itemUpload.loaded / itemUpload.total) * 100),
                        name: item.name
                    }
                    context.commit('updateFileProgress', loadingFile);
                }
            })
            .then((response) => {
                context.commit('updateFileProgress', { progress: 0, name: '' });
                context.commit('updateFilesList', item);
                context.commit('addImage', response.data);
            })
            .catch((error) => {
                console.log(error);
            })
        }

    },
    mutations: {
        addImage(state, imageName) {
            state.images.push(imageName);
        },
        addFileList(state, fileList) {
            state.files.order = fileList.slice();
        },
        updateFileProgress(state, { progress, name }) {
            state.files.progress = progress;
            state.files.current = name + ' ' + progress + '%';
        },
        updateFilesList(state, item) {
            state.files.finish.push(item);
            state.files.order.splice(item, 1);
        }
    },
    state: {
        images: [],
        files: {
            order: [],
            finish: [],
            progress: 0,
            current: '',
        }
    },
    getters: {
        getImages(state) {
            return state.images;
        },
        getFiles(state) {
            return state.files;
        }
    }
}
