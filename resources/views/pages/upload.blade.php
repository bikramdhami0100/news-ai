@extends('layouts.app')
@section('title', 'समाचार अपलोड')
@section('content')

    <!-- Main Content -->
    <main class="main-content">
        <!-- Page Header -->
        <section class="page-header">
            <div class="container">
                <h1>समाचार अपलोड</h1>
                <p>तपाईंको समाचार साझा गर्नुहोस्</p>
            </div>
        </section>

        <!-- Upload Form -->
        <section class="upload-section">
            <div class="container">
                <div class="upload-container">
                    <form class="upload-form" id="newsUploadForm">
                        <div class="form-group">
                            <label for="title">समाचारको शीर्षक *</label>
                            <input type="text" id="title" name="title" required placeholder="समाचारको शीर्षक लेख्नुहोस्">
                        </div>

                        <div class="form-group">
                            <label for="category">श्रेणी *</label>
                            <select id="category" name="category" required>
                                <option value="">श्रेणी छान्नुहोस्</option>
                                <option value="politics">राजनीति</option>
                                <option value="economy">अर्थतन्त्र</option>
                                <option value="society">समाज</option>
                                <option value="international">अन्तर्राष्ट्रिय</option>
                                <option value="technology">प्रविधि</option>
                                <option value="sports">खेलकुद</option>
                                <option value="entertainment">मनोरञ्जन</option>
                                <option value="lifestyle">जीवनशैली</option>
                                <option value="business">बिजनेस</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="summary">संक्षिप्त विवरण *</label>
                            <textarea id="summary" name="summary" required placeholder="समाचारको संक्षिप्त विवरण लेख्नुहोस्" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="content">समाचारको विस्तृत विवरण *</label>
                            <textarea id="content" name="content" required placeholder="समाचारको विस्तृत विवरण लेख्नुहोस्" rows="10"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="author">लेखकको नाम *</label>
                            <input type="text" id="author" name="author" required placeholder="तपाईंको नाम लेख्नुहोस्">
                        </div>

                        <div class="form-group">
                            <label for="email">ईमेल *</label>
                            <input type="email" id="email" name="email" required placeholder="तपाईंको ईमेल लेख्नुहोस्">
                        </div>

                        <div class="form-group">
                            <label for="image">तस्बिर अपलोड गर्नुहोस्</label>
                            <div class="file-upload">
                                <input type="file" id="image" name="image" accept="image/*">
                                <label for="image" class="file-upload-label">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                    <span>तस्बिर छान्नुहोस्</span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tags">ट्यागहरू</label>
                            <input type="text" id="tags" name="tags" placeholder="ट्यागहरू अल्पविरामले छुट्याउनुहोस्">
                            <small>उदाहरण: राजनीति, नेपाल, सरकार</small>
                        </div>

                        <div class="form-group">
                            <label for="priority">प्राथमिकता</label>
                            <select id="priority" name="priority">
                                <option value="normal">सामान्य</option>
                                <option value="high">उच्च</option>
                                <option value="urgent">तत्काल</option>
                            </select>
                        </div>

                        <div class="form-group checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" id="terms" name="terms" required>
                                <span class="checkmark"></span>
                                मैले <a href="#" class="terms-link">सर्तहरू र शर्तहरू</a> स्वीकार गर्छु
                            </label>
                        </div>

                        <div class="form-actions">
                            <button type="button" class="btn btn-secondary" id="draftBtn">ड्राफ्ट सेभ गर्नुहोस्</button>
                            <button type="submit" class="btn btn-primary" id="submitBtn">समाचार अपलोड गर्नुहोस्</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- Upload Guidelines -->
        <section class="upload-guidelines">
            <div class="container">
                <h2 class="section-title">अपलोड गाइडलाइनहरू</h2>
                <div class="guidelines-grid">
                    <div class="guideline-card">
                        <div class="guideline-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <h3>सामग्रीको गुणस्तर</h3>
                        <p>समाचार सही, प्रमाणित र नयाँ हुनुपर्छ। गलत जानकारी वा पुरानो समाचार अपलोड नगर्नुहोस्।</p>
                    </div>
                    
                    <div class="guideline-card">
                        <div class="guideline-icon">
                            <i class="fas fa-language"></i>
                        </div>
                        <h3>भाषा र शैली</h3>
                        <p>समाचार नेपाली भाषामा लेख्नुहोस् र स्पष्ट, सरल शब्दहरू प्रयोग गर्नुहोस्।</p>
                    </div>
                    
                    <div class="guideline-card">
                        <div class="guideline-icon">
                            <i class="fas fa-image"></i>
                        </div>
                        <h3>तस्बिरहरू</h3>
                        <p>तस्बिरहरू स्पष्ट, उच्च गुणस्तरका र समाचारसँग सम्बन्धित हुनुपर्छ।</p>
                    </div>
                    
                    <div class="guideline-card">
                        <div class="guideline-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3>सुरक्षा र नैतिकता</h3>
                        <p>समाचार नैतिक मानदण्डहरूको पालना गर्दै लेख्नुहोस् र कुनै पनि हानिकारक सामग्री नराख्नुहोस्।</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        // Upload form functionality
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('newsUploadForm');
            const submitBtn = document.getElementById('submitBtn');
            const draftBtn = document.getElementById('draftBtn');
            
            // File upload preview
            const fileInput = document.getElementById('image');
            const fileLabel = document.querySelector('.file-upload-label');
            
            fileInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    fileLabel.innerHTML = `<i class="fas fa-check-circle"></i><span>${file.name}</span>`;
                    fileLabel.classList.add('file-selected');
                }
            });
            
            // Form submission
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Show loading state
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> अपलोड हुँदै...';
                submitBtn.disabled = true;
                
                // Simulate upload process
                setTimeout(() => {
                    // Reset button
                    submitBtn.innerHTML = 'समाचार अपलोड गर्नुहोस्';
                    submitBtn.disabled = false;
                    
                    // Show success message
                    if (window.NewsAI) {
                        window.NewsAI.showNotification('समाचार सफलतापूर्वक अपलोड भयो', 'success');
                    }
                    
                    // Reset form
                    form.reset();
                    fileLabel.innerHTML = '<i class="fas fa-cloud-upload-alt"></i><span>तस्बिर छान्नुहोस्</span>';
                    fileLabel.classList.remove('file-selected');
                }, 2000);
            });
            
            // Draft save functionality
            draftBtn.addEventListener('click', function() {
                if (window.NewsAI) {
                    window.NewsAI.showNotification('ड्राफ्ट सेभ भयो', 'info');
                }
            });
            
            // Character counter for textareas
            const textareas = document.querySelectorAll('textarea');
            textareas.forEach(textarea => {
                const maxLength = textarea.getAttribute('maxlength') || 1000;
                const counter = document.createElement('div');
                counter.className = 'char-counter';
                counter.textContent = `0/${maxLength}`;
                textarea.parentNode.appendChild(counter);
                
                textarea.addEventListener('input', function() {
                    const length = this.value.length;
                    counter.textContent = `${length}/${maxLength}`;
                    
                    if (length > maxLength * 0.9) {
                        counter.style.color = '#dc3545';
                    } else {
                        counter.style.color = '#666';
                    }
                });
            });
        });
    </script>
@endsection