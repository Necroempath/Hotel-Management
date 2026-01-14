 <style>
     form>div {
         margin-bottom: 16px;
     }

     form {
         max-width: 800px;
     }

     label {
         display: inline-block;
         margin-bottom: 6px;
         font-size: 14px;
         color: #b5b5b5;
     }


     input[type="text"],
     input[type="file"],
     textarea,
     select {
         width: 100%;
         background: #1a1a1a !important;
         border: 1px solid #2a2a2a !important;
         color: #e6e6e6;
         padding: 10px 12px;
         border-radius: 8px;
         font-size: 14px;
         transition: border-color 0.2s, box-shadow 0.2s;
     }

     textarea {
         resize: vertical;
         min-height: 80px;
     }


     input:focus,
     textarea:focus,
     select:focus {
         outline: none;
         border-color: #db6574;
         box-shadow: 0 0 0 2px rgba(79, 70, 229, 0.35);
     }

     input[type="file"] {
         padding: 6px;
         color: #aaa;
     }

     ::placeholder {
         color: #666;
     }

     .btn-danger:focus,
     .btn-danger:active {
         box-shadow: none;
         color: #fff;
     }
 </style>