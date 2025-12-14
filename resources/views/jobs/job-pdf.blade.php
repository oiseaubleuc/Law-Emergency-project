<!DOCTYPE html>
<html>
<head>
    <title>Casus Details</title>
    <style>
        body { 
            font-family: DejaVu Sans, sans-serif; 
            padding: 20px;
        }
        .header {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }
        .header img {
            width: 100px;
            height: auto;
            margin-right: 20px;
        }
        .content {
            margin-top: 20px;
        }
        .field {
            margin-bottom: 15px;
        }
        .field-label {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .field-value {
            padding: 8px;
            background-color: #f5f5f5;
            border-radius: 4px;
        }
    </style>
</head>
<body>
<div class="header">
    <img src="{{ public_path('images/logo.svg') }}" alt="Logo">
    <h1>Casus Details</h1>
</div>

<div class="content">
    <div class="field">
        <div class="field-label">ID:</div>
        <div class="field-value">{{ $job->id }}</div>
    </div>
    
    <div class="field">
        <div class="field-label">Naam:</div>
        <div class="field-value">{{ $job->naam }}</div>
    </div>
    
    <div class="field">
        <div class="field-label">Voornaam:</div>
        <div class="field-value">{{ $job->voornaam }}</div>
    </div>
    
    <div class="field">
        <div class="field-label">Username:</div>
        <div class="field-value">{{ $job->username }}</div>
    </div>
    
    <div class="field">
        <div class="field-label">Email:</div>
        <div class="field-value">{{ $job->email }}</div>
    </div>
    
    <div class="field">
        <div class="field-label">Type:</div>
        <div class="field-value">{{ $job->type }}</div>
    </div>
    
    <div class="field">
        <div class="field-label">Beschrijving:</div>
        <div class="field-value">{{ $job->beschrijving }}</div>
    </div>
    
    <div class="field">
        <div class="field-label">Aangemaakt op:</div>
        <div class="field-value">{{ $job->created_at->format('d-m-Y H:i') }}</div>
    </div>
</div>
</body>
</html>

