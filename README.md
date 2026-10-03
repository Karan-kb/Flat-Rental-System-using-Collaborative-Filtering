# Flat Rental Engine with Integrated User-Based Collaborative Filtering

This repository features an academic property rental platform integrated with an **Algorithmic Information Retrieval (IR) Core**. The engine leverages **User-Based Collaborative Filtering (UBCF)** to process multi-dimensional behavior matrices and serve personalized property recommendations to active tenants.

---

## ⚠️ Prototype Status & Research Context

This repository represents an academic research prototype developed as a **Final Year Undergraduate Capstone Project**. 
* **Focus:** The primary objective of this codebase is the architectural integration of information retrieval matrices within an enterprise web framework, rather than a production-ready deployment.
* **Environment Integrity:** Certain third-party integrations, local environment variables, or database dependencies may require manual configuration tuning for absolute local compilation.

---

## 🏗️ Algorithmic Core & Mathematical Framework

Unlike static content filtering based on simple tags, this platform implements behavioral predictive modeling. It analyzes historical tenant interaction vectors to find behavioral proximity between users.

### 1. User-Item Interaction Matrix
The module maps tenant behaviors (views, saves, interactions) into a mathematical **User-Item Matrix ($R$)**, where:
* Rows represent unique tenant profiles ($U$).
* Columns represent distinct rental properties ($I$).
* Missing intersections represent unmapped sparse data points requiring algorithmic prediction.

### 2. Angular Proximity Profiles (Pearson Correlation Matrix)
To compute similarity weights between Tenant $A$ ($u$) and Tenant $B$ ($v$), the system evaluates the directional variance of their behavioral arrays. The calculation targets user groups with highly correlated interaction behaviors:

$$\text{Similarity}(u, v) = \frac{\sum_{i \in I_{uv}} (R_{u,i} - \bar{R}_u)(R_{v,i} - \bar{R}_v)}{\sqrt{\sum_{i \in I_{uv}} (R_{u,i} - \bar{R}_u)^2} \sqrt{\sum_{i \in I_{uv}} (R_{v,i} - \bar{R}_v)^2}}$$

* **Behavioral Nearest-Neighbors:** The platform extracts a dynamic cluster of the top $K$ nearest users who share the highest interaction matching index with the active session user.
* **Inference Pipeline:** Properties highly engaged with by this neighbor-cluster—which the current active user has not yet discovered—are extracted, ranked, and pushed to the client view interface.

---

## 🛠️ Data Infrastructure & System Design

* **Dynamic Matrix Processing Core:** Custom backend logic that transforms standard relational data (MySQL tables) into high-performance vectors for similarity evaluations.
* **Property State-Machine:** Manages localized listing variations, tenant matching limits, and lease status validations.
* **Decoupled Service-Repository Layers:** Built using architectural design patterns that isolate core entity records from the recommender algorithm modules.

---

## ⚙️ Tech Stack & Requirements

* **Primary Infrastructure Core:** Laravel (PHP)
* **Relational Database Management:** MySQL (Optimized Indexes for Matrix Ingestion)
* **Frontend Design Framework:** Tailwind CSS & Vite Architecture

---

## 🚀 Deployment & Local Environment Setup

### Step 1: Clone Workspace & Components
```bash
git clone https://github.com
cd Flat-Rental-System-using-Collaborative-Filtering
```

### Step 2: Initialize Core System Configurations
Create a clean system configuration workspace and map your server credentials:
```bash
composer install
cp .env.example .env
php artisan key:generate
```

### Step 3: Run Database Relational Migrations
Construct the physical database schemas, access control vectors, and target lookup tracking indices:
```bash
php artisan migrate
```

### Step 4: Asset Initialization Pipeline
Compile frontend resource dependencies for client rendering:
```bash
npm install
npm run dev
```
