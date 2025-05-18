#  3D Furniture Viewer — Laravel 12

A modern **Laravel 12-based web application** where users can **search for furniture by name, dimensions, and type (Modern / Classic)** and view their furniture choices through a rich **interactive 3D preview**. The platform allows for image uploads, search filters, and a smooth model viewing experience with options to rotate and zoom into each 3D model for a detailed look.

---

![furniture](https://github.com/user-attachments/assets/3ac03af5-1d30-4ab6-a07c-8acdd21dbb86)

![3D](https://github.com/user-attachments/assets/6c5d8bd6-edf1-4616-bafe-cc8b40539cb8)


## 📌 Features

- 🔍 **Search Functionality**
  - Search furniture items by:
    - **Name**
    - **Dimensions (Height, Width, Depth)**
    - **Type**: Modern / Classic / Other
  
- 📃 **Search Results Display**
  - Shows furniture **name**, **type**, **dimensions**, **image preview**, and **3D viewer option**.

- 🖼️ **Image Upload**
  - Upload and manage images for each furniture item.

- 🛋️ **3D Furniture Preview**
  - Interactive 3D model viewer.
  - Users can **rotate**, **zoom**, and **pan** the furniture models.
  - Smooth loading of 3D models in `.glb`, `.gltf`, or `.obj` formats.



---

## ⚙️ Installation & Setup

Follow these steps to install and run the project locally:



```bash
git clone https://github.com/yourusername/3d-furniture-viewer.git
cd 3d-furniture-viewer

1 Run Migrations
php artisan migrate

2 Seed Demo Data (Optional)
php artisan db:seed

3 Serve the Application
php artisan serve

Visit http://localhost:8000 in your browser.

📥 Adding 3D Models
📌 IMPORTANT NOTE:
The 3D models for the furniture items should be downloaded separately and placed manually in the public/models/ directory.

Each furniture record in the database must reference the filename of its corresponding 3D model for the preview functionality to work properly.

Supported formats:

.glb

.gltf

.obj


