import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'
import path from 'path'
import devManifest from 'vite-plugin-dev-manifest';

// https://vitejs.dev/config/
export default defineConfig({
    plugins: [
        vue(), 
        devManifest()
    ],
    build: {
        // // generate manifest.json in outDir
        // manifest: true,
        rollupOptions: {
          // overwrite default .html entry
        // specify your input files here, as stated in Vite config https://vitejs.dev/config/#build-rollupoptions
            input: 'src/main.js',
        },
    },
    // server: {
    //     port: 3000,
    //     open: true,
    //     hmr: {
    //         overlay: true
    //     }
    // },
    // resolve: {
    //     alias: {
    //         '@': path.resolve(__dirname, 'src')
    //     }
    // }

})